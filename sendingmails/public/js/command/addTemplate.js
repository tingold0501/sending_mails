import { cmdSave, url } from "../consts.js";
export default (editor, config) => {
    var body = editor.getHtml();
    var css_text = editor.getCss();
    const xml = new XMLHttpRequest();

    editor.Commands.add(cmdSave, {
        run() {
            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    console.log(xml.responseText);
                    
                    editor.Modal.close();
                }
            }
            xml.open("POST", url +"email-template-store", true);
            xml.send(body + css_text);
            console.log(xml.responseText);
            
            editor.Modal.close();
        },
        stop: () => { },
    });
}