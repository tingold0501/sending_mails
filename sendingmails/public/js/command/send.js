import { select2 } from "../components/dropdown.js";
import { url } from "../consts.js";
export default (editor, config) => {
    editor.Commands.add('send', {
        run: () => {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            var variableArray = [];        
            

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

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);

            // Chuyển đổi mảng thành chuỗi JSON
            formData.append("variable_keys[]", JSON.stringify(variableArray));
            xml.open("POST", url + "email-template-store");
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            xml.setRequestHeader("X-CSRF-TOKEN", csrfToken);
            xml.send(formData);
        }
    });
};