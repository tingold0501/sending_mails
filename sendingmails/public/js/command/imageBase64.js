import { url } from "../consts";
export default (editor, config) => {
    editor.Commands.add("imageBase64", {
        run(){
            var body = editor.getHtml();
            var css_text = editor.getCss();
            const xml = new XMLHttpRequest();
            body = document.getElementsByTagName("img");

            xml.onreadystatechange = function () {
                if (xml.readyState == 4 && xml.status == 200) {
                    console.log(xml.responseText);
                    editor.Modal.close();
                }
                else if (xml.readyState == 4 && xml.status == 400) {
                    console.error("Error:", xml.responseText);
                }
            };
        },
        stop: () => {},
    });
}