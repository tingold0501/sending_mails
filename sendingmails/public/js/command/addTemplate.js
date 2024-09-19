import { cmdSave, urlApi } from "../consts.js";
export default (editor, config) => {
    editor.Commands.add(cmdSave, {
        run() {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            const xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    console.log(xml.responseText);
                    editor.Modal.close();
                }
                else if (xml.readyState == 4 && xml.status == 400) {
                    console.error("Error:", xml.responseText);
                }
            };

            // Use FormData to properly format the HTML and CSS
            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);

            xml.open("POST", urlApi + "email-template-store", true);
            xml.send(formData); // Send the formData containing HTML and CSS
            console.log(body, css_text);
            
            window.location.reload();
        },
        stop: () => { },
    });
};