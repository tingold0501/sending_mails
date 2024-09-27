export default (selected, oldValue, mouseX, container) => {
    const select = document.getElementById("variableSelector");
    select.addEventListener("change", (event) => {

        const selectedValue = select.options[select.selectedIndex];
        const selector = selectedValue.value;
        const startPos = oldValue.selectionStart;
        const endPos = oldValue.selectionEnd;

        var before = oldValue.substring(0, startPos);
        var after = oldValue.substring(endPos, oldValue.length);

        selected.view.el.textContent = before + selector + after;
        oldValue.selectionStart = oldValue.selectionEnd = startPos + selector.length;
        oldValue.focus();
        console.log(selected.view.el.textContent);
    });
};
