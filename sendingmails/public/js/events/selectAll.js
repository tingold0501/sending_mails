document.addEventListener("DOMContentLoaded", () => {
    const btnSelectAll = document.querySelector("#btnSelectAll");
    btnSelectAll.addEventListener("click", () => {
        const checkboxes = document.querySelectorAll("#checkbox");
        console.log("Checkboxes:", checkboxes);
        const isAllUnchecked = Array.from(checkboxes).every((checkbox) => !checkbox.checked);
        if (isAllUnchecked) {
            checkboxes.forEach((checkbox) => {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach((checkbox) => {
                checkbox.checked = false;
            });
        }
    });
});