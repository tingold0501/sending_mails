export default (editor, plugin) => {
    const select2Content = `<div class="btn-group">
  <button type="button" class=" btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>`;

    // Tạo container để chứa select2
    let container = document.createElement("div");
    container.id = "select-container";
    container.style.position = "absolute"; // Cho phép di chuyển theo vị trí
    // container.style.backgroundColor = "black";
    container.style.zIndex = "9999";

    // Biến lưu trữ vị trí chuột hiện tại
    let mouseX = 0;
    let mouseY = 0;

    // Theo dõi vị trí con trỏ chuột
    document.addEventListener("mousemove", (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });

    editor.on("component:selected", (event) => {
        const selected = editor.getSelected();
        console.log(selected.getAttributes());

        document.addEventListener("keydown", function (event) {
            if (event.key === "{") {
                console.log('Mouse position:', mouseX, mouseY);
                
                // Đặt vị trí của container chứa select2 tại vị trí con trỏ chuột
                container.style.left = `${mouseX}px`;
                container.style.top = `${mouseY}px`;

                // Chèn nội dung select2 vào container
                container.innerHTML = select2Content;
                $(".js-example-basic-single").select2();

                // Append container vào body
                document.body.appendChild(container);
                console.log(container);
            }
        });
    });
    editor.on("component:deselected", (event) => {
        container.innerHTML = "";
    });
    
      
};