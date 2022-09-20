

//GERE LE COLAPSE
function toggleNavbar(collapseID){
  document.getElementById(collapseID).classList.toggle("hidden");
  document.getElementById(collapseID).classList.toggle("flex");
}

//GERE LE DROPDOWN
function openDropdown(event,dropdownID){
  event.preventDefault();
  let element = event.target;
  
  while(element.nodeName !== "A" ){
    element = element.parentNode;
  }
  var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
    placement: 'bottom-start'
  });
  document.getElementById(dropdownID).classList.toggle("hidden");
  document.getElementById(dropdownID).classList.toggle("block");
}

// Change l'icone quand on clique sur l'item "MES TRAVAUX" 
$('#menu').on('click',function(){
  $('#down-up').toggleClass("fa-angle-down");
  $('#down-up').toggleClass("fa-angle-up");
});
