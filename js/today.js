const grid = document.getElementById("grid-gallery");
let currentPage = 1;
let totalPages = 0;

document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("load", function() {
        function loadNoticeBoard(page) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `./php/board_today_read.php?page=${page}`, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const data = response.data;
                    data.forEach(list => {
                        const item = document.createElement("div");
                        item.className = "item";
                        item.addEventListener("click", function(){
                            window.location.href = `./board_today_view.php?num=${list.num}&page=${page}`;
                        });
                        const content = document.createElement("div");
                        content.className = "content";

                        const img = document.createElement("img");
                        if(list.file_name){
                            img.src = `./data/${list.file_copied}`;
                        }
                        else{
                            img.src = `./img/logo.png`;
                        }
                        content.appendChild(img);
            
                        const title = document.createElement("div");
                        title.className = "title";
                        title.textContent = list.title;
            
                        const name = document.createElement("div");
                        name.className = "name";
                        name.textContent = list.name;
            
                        const date = document.createElement("div");
                        date.className = "date";
                        date.textContent = list.regist_day;
                            
                        grid.appendChild(item);
                        item.appendChild(content);
                        content.appendChild(img);
                        content.appendChild(title);
                        content.appendChild(name);
                        content.appendChild(date);
                    });
                } else {
                    alert("데이터베이스 조회에 실패했습니다.");
                }
            };
            xhr.onerror = function() {
                alert("페이지 로드에 실패했습니다.");
            };
            xhr.send();
            }

        loadNoticeBoard(1);
    });
});
