document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll("#checkbox"); 
    const btnAdd = document.querySelector("#btnAdd"); 
    const btnSend = document.querySelector("#btnSend"); 

    
    const updateButtons = () => {
      const isAnyChecked = Array.from(checkboxes).some((checkbox) => checkbox.checked); 
      const isAllUnchecked = Array.from(checkboxes).every((checkbox) => !checkbox.checked); 
  
      btnSend.style.display = isAnyChecked ? "block" : "none";
  
      btnAdd.style.display = isAllUnchecked ? "block" : "none";
      console.log(contracts);
    
    };
  
    checkboxes.forEach((checkBox) => {
      checkBox.addEventListener("change", updateButtons);
    });
  
    updateButtons();
  });