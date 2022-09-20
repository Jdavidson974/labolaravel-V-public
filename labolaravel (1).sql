-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 20 sep. 2022 à 15:06
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `labolaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `atouts`
--

CREATE TABLE `atouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `atouts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `atouts`
--

INSERT INTO `atouts` (`id`, `atouts`, `created_at`, `updated_at`) VALUES
(1, 'Sociable', '2022-08-19 18:00:43', '2022-08-19 18:00:43'),
(2, 'Curieux', '2022-08-19 18:00:43', '2022-08-19 18:00:43'),
(3, 'Serieux', '2022-08-19 18:00:43', '2022-08-19 18:00:43');

-- --------------------------------------------------------

--
-- Structure de la table `atout_cv`
--

CREATE TABLE `atout_cv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `atouts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `atout_cv`
--

INSERT INTO `atout_cv` (`id`, `cvs_id`, `atouts_id`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '2022-08-19 18:03:12', '2022-08-19 18:03:12'),
(2, 3, 3, '2022-08-19 18:03:12', '2022-08-19 18:03:12');

-- --------------------------------------------------------

--
-- Structure de la table `citations`
--

CREATE TABLE `citations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `example` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `citations`
--

INSERT INTO `citations` (`id`, `example`, `created_at`, `updated_at`) VALUES
(1, 'J\'ai une soif d\'apprentissage sur les nouvelles technologies et\nj\'aime surtout coder plein de petits programmes\n(utiles comme inutiles)', '2022-07-06 12:15:49', '2022-07-06 12:15:49'),
(2, 'jhsdfbjh', '2022-07-06 12:17:41', '2022-07-06 12:17:41');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `nom_competence`, `created_at`, `updated_at`) VALUES
(14, 'Bonne notion en algorithmie', '2022-08-24 20:00:51', '2022-08-24 20:00:51'),
(15, 'Javascript, JQUERY', '2022-08-24 20:00:57', '2022-08-24 20:00:57'),
(16, 'PHP SYMFONY4 LARAVEL8', '2022-08-24 20:01:04', '2022-08-24 20:01:04'),
(17, 'HTML5 , CSS3', '2022-08-24 20:01:12', '2022-08-24 20:01:12'),
(18, 'SQL', '2022-08-24 20:01:35', '2022-08-24 20:01:35'),
(19, 'toto', '2022-09-02 18:36:32', '2022-09-02 18:36:32');

-- --------------------------------------------------------

--
-- Structure de la table `cvs`
--

CREATE TABLE `cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre_du_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `citation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cvs`
--

INSERT INTO `cvs` (`id`, `titre_du_cv`, `actif`, `created_at`, `updated_at`, `citation_id`) VALUES
(3, 'Développeur web et web mobile en alternance ou emplois ', 1, '2022-07-06 14:00:11', '2022-07-06 14:00:11', 1),
(4, 'Développeur Logiciel', 0, '2022-07-06 14:00:38', '2022-07-06 14:00:38', 2);

-- --------------------------------------------------------

--
-- Structure de la table `cv_competence`
--

CREATE TABLE `cv_competence` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `competences_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cv_diplome_formation`
--

CREATE TABLE `cv_diplome_formation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `diplome_formations_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv_diplome_formation`
--

INSERT INTO `cv_diplome_formation` (`id`, `cvs_id`, `diplome_formations_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2022-08-19 14:03:00', '2022-08-19 14:03:18'),
(2, 3, 2, '2022-08-19 14:59:00', '2022-08-19 14:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `cv_experience`
--

CREATE TABLE `cv_experience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `experiences_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv_experience`
--

INSERT INTO `cv_experience` (`id`, `cvs_id`, `experiences_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2022-08-19 16:47:32', '2022-08-19 16:47:32');

-- --------------------------------------------------------

--
-- Structure de la table `cv_information`
--

CREATE TABLE `cv_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `informations_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv_information`
--

INSERT INTO `cv_information` (`id`, `cvs_id`, `informations_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2022-08-17 13:48:42', '2022-08-17 13:48:42');

-- --------------------------------------------------------

--
-- Structure de la table `cv_interet`
--

CREATE TABLE `cv_interet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `interets_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv_interet`
--

INSERT INTO `cv_interet` (`id`, `cvs_id`, `interets_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2022-08-19 18:34:02', '2022-08-19 18:34:02');

-- --------------------------------------------------------

--
-- Structure de la table `cv_langue`
--

CREATE TABLE `cv_langue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvs_id` bigint(20) UNSIGNED NOT NULL,
  `langues_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv_langue`
--

INSERT INTO `cv_langue` (`id`, `cvs_id`, `langues_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2022-08-19 18:22:16', '2022-08-19 18:22:16');

-- --------------------------------------------------------

--
-- Structure de la table `diplome_formations`
--

CREATE TABLE `diplome_formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diplome_formation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut_diplome_formation` date NOT NULL,
  `date_fin_diplome_formation` date NOT NULL,
  `organisme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diplome` tinyint(1) NOT NULL,
  `formation` tinyint(1) NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `diplome_formations`
--

INSERT INTO `diplome_formations` (`id`, `diplome_formation`, `date_debut_diplome_formation`, `date_fin_diplome_formation`, `organisme`, `ville`, `pays`, `diplome`, `formation`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'Titre professionnel : Développeur Web et Web Mobile\r\n(Bac + 2)', '2021-09-06', '2022-05-13', 'AFPAR', 'Saint-André', 'Réunion', 1, 0, NULL, '2022-08-19 13:53:15', '2022-08-19 13:53:15'),
(2, 'CAP Vente Alimentaire', '2012-07-02', '2014-07-01', 'CFA Pont Sainte Marie', 'Troyes', 'France', 1, 1, NULL, '2022-08-19 14:54:10', '2022-08-19 14:54:10');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut_exp` date NOT NULL,
  `date_fin_exp` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `experience`, `ville`, `pays`, `entreprise`, `date_debut_exp`, `date_fin_exp`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Développeur web et web mobile', 'Saint André', 'Réunion', 'Afpar', '2021-09-06', '2022-05-13', 'Stage de 10 semaines chez INOTECH.OI pour : Ajout de\nfonctionnalités sur un backend existant SYMFONY 4 +\nR&D sur un projet SHOPIFY.<br>\nEn formation : \nApprentissage HTML , CSS , JavaScript avec divers projet pour évaluation. <br>\nApprentissage Wordpress avec divers projet pour\névaluation.<br>\nApprentissage PHP avec divers projet pour évaluation.<br>\nApprentissage SQL avec exercices pour évaluer nos\nrequêtes.<br>\nApprentissage de la programmation orienté objet.<br>', '2022-08-19 16:46:10', '2022-08-19 16:46:10');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adresse` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permis` tinyint(1) NOT NULL,
  `vehicule` tinyint(1) NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`id`, `adresse`, `mail`, `tel`, `nom`, `prenom`, `permis`, `vehicule`, `distance`, `naissance`, `created_at`, `updated_at`) VALUES
(1, '180 TER Chemin Commune Bègue\n97441 Sainte Suzanne', 'sautrondavidsonpro@gmail.com', '0692380854', 'SAUTRON', 'Jean Davidson', 1, 1, 'De St Denis à St Benoît', '1995-01-31', '2022-08-17 12:20:43', '2022-08-17 12:20:43');

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interets` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interets`
--

INSERT INTO `interets` (`id`, `interets`, `created_at`, `updated_at`) VALUES
(1, 'Pêche de fond', '2022-08-19 18:31:52', '2022-08-19 18:31:52');

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `langue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `langue`, `created_at`, `updated_at`) VALUES
(1, 'Anglais (niveaux basique)', '2022-08-19 18:21:45', '2022-08-19 18:21:45');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_06_120833_create_information_table', 1),
(6, '2022_07_06_132318_create_citations_table', 1),
(7, '2022_07_06_133020_create_cvs_table', 1),
(10, '2022_08_17_134525_create_pivot_table_cv_information', 2),
(11, '2022_08_19_115227_create_competences_table', 3),
(16, '2022_08_19_120452_create_pivot_table_cv_competence', 4),
(18, '2022_08_19_135213_create_diplome_formations_table', 5),
(19, '2022_08_19_140103_create_pivot_table_cv_diplome_formation', 6),
(24, '2022_08_19_161722_create_experiences_table', 7),
(25, '2022_08_19_164129_create_pivot_table_cv_experience', 7),
(26, '2022_08_19_175918_create_atouts_table', 8),
(27, '2022_08_19_180209_create_pivot_table_atout_cv', 9),
(28, '2022_08_19_181854_create_langues_table', 10),
(29, '2022_08_19_182020_create_pivot_table_cv_langue', 11),
(30, '2022_08_19_183027_create_interets_table', 12),
(31, '2022_08_19_183237_create_pivot_table_cv_interet', 13);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `atouts`
--
ALTER TABLE `atouts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `atout_cv`
--
ALTER TABLE `atout_cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atout_cv_cvs_id_foreign` (`cvs_id`),
  ADD KEY `atout_cv_atouts_id_foreign` (`atouts_id`);

--
-- Index pour la table `citations`
--
ALTER TABLE `citations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cvs_citation_id_foreign` (`citation_id`);

--
-- Index pour la table `cv_competence`
--
ALTER TABLE `cv_competence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_competence_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_competence_competences_id_foreign` (`competences_id`);

--
-- Index pour la table `cv_diplome_formation`
--
ALTER TABLE `cv_diplome_formation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_diplome_formation_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_diplome_formation_diplome_formations_id_foreign` (`diplome_formations_id`);

--
-- Index pour la table `cv_experience`
--
ALTER TABLE `cv_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_experience_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_experience_experiences_id_foreign` (`experiences_id`);

--
-- Index pour la table `cv_information`
--
ALTER TABLE `cv_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_information_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_information_informations_id_foreign` (`informations_id`);

--
-- Index pour la table `cv_interet`
--
ALTER TABLE `cv_interet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_interet_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_interet_interets_id_foreign` (`interets_id`);

--
-- Index pour la table `cv_langue`
--
ALTER TABLE `cv_langue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cv_langue_cvs_id_foreign` (`cvs_id`),
  ADD KEY `cv_langue_langues_id_foreign` (`langues_id`);

--
-- Index pour la table `diplome_formations`
--
ALTER TABLE `diplome_formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `atouts`
--
ALTER TABLE `atouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `atout_cv`
--
ALTER TABLE `atout_cv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `citations`
--
ALTER TABLE `citations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cv_competence`
--
ALTER TABLE `cv_competence`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cv_diplome_formation`
--
ALTER TABLE `cv_diplome_formation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cv_experience`
--
ALTER TABLE `cv_experience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cv_information`
--
ALTER TABLE `cv_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cv_interet`
--
ALTER TABLE `cv_interet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cv_langue`
--
ALTER TABLE `cv_langue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `diplome_formations`
--
ALTER TABLE `diplome_formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `atout_cv`
--
ALTER TABLE `atout_cv`
  ADD CONSTRAINT `atout_cv_atouts_id_foreign` FOREIGN KEY (`atouts_id`) REFERENCES `atouts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `atout_cv_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cvs`
--
ALTER TABLE `cvs`
  ADD CONSTRAINT `cvs_citation_id_foreign` FOREIGN KEY (`citation_id`) REFERENCES `citations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_competence`
--
ALTER TABLE `cv_competence`
  ADD CONSTRAINT `cv_competence_competences_id_foreign` FOREIGN KEY (`competences_id`) REFERENCES `competences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_competence_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_diplome_formation`
--
ALTER TABLE `cv_diplome_formation`
  ADD CONSTRAINT `cv_diplome_formation_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_diplome_formation_diplome_formations_id_foreign` FOREIGN KEY (`diplome_formations_id`) REFERENCES `diplome_formations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_experience`
--
ALTER TABLE `cv_experience`
  ADD CONSTRAINT `cv_experience_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_experience_experiences_id_foreign` FOREIGN KEY (`experiences_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_information`
--
ALTER TABLE `cv_information`
  ADD CONSTRAINT `cv_information_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_information_informations_id_foreign` FOREIGN KEY (`informations_id`) REFERENCES `informations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_interet`
--
ALTER TABLE `cv_interet`
  ADD CONSTRAINT `cv_interet_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_interet_interets_id_foreign` FOREIGN KEY (`interets_id`) REFERENCES `interets` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cv_langue`
--
ALTER TABLE `cv_langue`
  ADD CONSTRAINT `cv_langue_cvs_id_foreign` FOREIGN KEY (`cvs_id`) REFERENCES `cvs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cv_langue_langues_id_foreign` FOREIGN KEY (`langues_id`) REFERENCES `langues` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
