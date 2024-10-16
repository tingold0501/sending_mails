import { cmdSave, url, timeout } from "../consts.js";
import { sendXMLHttp } from "../events/sendXMLHttp.js";
export default (editor, config) => {
    editor.Commands.add(cmdSave, {
        run() {
            var body = editor.getHtml();
            var css_text = editor.getCss();
            var variables = JSON.parse(
                localStorage.getItem("variable_keys")
            );
            let arrayVariableKeys = [];
            variables.forEach((variable) => {
                let regex = new RegExp(`${variable.placeholder}`);
                regex = variable.name;
                body = body.replace(regex, variable.key);
            });
            console.log(variables);

            variables.map((variable) => {
                arrayVariableKeys.push(variable.key);
                return arrayVariableKeys;
            });
          
            console.log(arrayVariableKeys);

            const formData = new FormData();
            formData.append("body", body);
            formData.append("css_text", css_text);
            formData.append("variable_keys", arrayVariableKeys);

            sendXMLHttp("POST", url + "email-template-store", formData, "/user-dashboard");
        },
        stop: () => {},
    });
};
