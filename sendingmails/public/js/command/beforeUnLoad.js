import { timeout, url } from "../consts.js";
import { sendXMLHttp } from "../events/sendXMLHttp.js";
export function beforeUnLoad(editor, config) {
    Swal.fire({
        title: "Do you want to save the changes?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`,
    }).then((result) => {
        if (result.isConfirmed) {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            var variables = JSON.parse(
                localStorage.getItem("variable_keys")
            );
            
            variables.forEach((variable) => {
                let regex = new RegExp(`${variable.placeholder}`);
                regex = variable.name;
                body = body.replace(regex, variable.key);
            });

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);
            formData.append("variable_keys", variables);
            console.log(variables);
            
            sendXMLHttp("POST", url + "email-template-store", formData, "/user-dashboard");
        } else if (result.isDenied) {
            setTimeout(() => {
                window.location.replace("/user-dashboard");
            }, timeout);
            Swal.fire("Changes are not saved", "", "info");
        }
    });
}
