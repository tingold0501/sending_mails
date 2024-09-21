export default (editor, config) => {
    editor = document.body;
   
    const select2Content = `<select id='selectAttr' class="js-example-basic-single" name="state">
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
            </select>`;

    // Tạo container để chứa select2
    let container = document.createElement('div');
    container.id = 'select-container';
    container.style.position = 'absolute';  // Cho phép di chuyển theo vị trí
    container.style.backgroundColor = 'black';
    editor.appendChild(container);   // Thêm container vào body

    // Hàm lấy vị trí con trỏ
    function getCaretPosition(event) {
        // Chỉ trả về vị trí x và y của chuột khi nhấn vào text
        const x =  event.clientX;  // Lấy vị trí trên trục X
        const y =  event.clientY;  // Lấy vị trí trên trục Y
        return { x, y };
    }

    // Lắng nghe sự kiện keyup để phát hiện khi người dùng gõ "{"
    document.addEventListener("keydown", function (event) {
        if (event.key === "{") {
            // Lấy vị trí hiện tại của con trỏ
            const caretPosition = getCaretPosition(event);
            console.log(caretPosition);
            
            // Đặt vị trí của container chứa select2 tại vị trí con trỏ 
            container.style.left = `${caretPosition.x}px`;
            container.style.top = `${caretPosition.y}px`;

            // Chèn nội dung select2 vào container
            container.innerHTML = select2Content;

            // Khởi tạo Select2 sau khi nội dung được chèn vào DOM
            $('.js-example-basic-single').select2();
        }
    });

    // Xóa Select2 khi người dùng click ra ngoài container
    document.addEventListener('click', function (event) {
        const isClickInside = container.contains(event.target);

        if (!isClickInside) {
            container.innerHTML = '';  // Xóa nội dung container khi click ra ngoài
        }
    });
};