import { cmdSend, urlApi } from "../consts.js";

export default (editor, config) => {
    editor.Commands.add(cmdSend, {
        run() {
            // Tạo chuỗi HTML cho modal với CSS nội tuyến
            const modalContent = `
                <style>
                    .modal-form {
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                    }
                    .modal-form label {
                        font-weight: bold;
                    }
                    .modal-form input {
                        padding: 8px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                    }
                    .modal-form button {
                        padding: 10px;
                        background-color: #007bff;
                        color: white;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    }
                    .modal-form button:hover {
                        background-color: #0056b3;
                    }
                </style>
                <form class="modal-form">
                    <label for="email">Email address:</label>
                    <input type="text" name="email" id="email" placeholder="Email address" />
                    <button type="submit">Submit</button>
                </form>
            `;
            
            // Mở modal với nội dung đã tạo
            editor.Modal.open({
                title: "My title", // string | HTMLElement
                content: modalContent
            });
        },
        stop: () => {},
    });
};