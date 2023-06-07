const boardList = document.getElementById("boardList");
let currentPage = 1;
let totalPages = 0;

document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("load", function() {
        function loadNoticeBoard(page) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `./php/board_info_supplements_read.php?page=${page}`, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    const data = response.data;
                    if (data.length === 0) {
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "게시물이 없습니다.";
                        nullCell.colSpan = 5;
                        nullRow.appendChild(nullCell);
                        boardList.style.height = "400px";
                        boardList.appendChild(nullRow);
                    } else {
                        data.forEach(list => {
                            const newRow = document.createElement("tr");
                            const num = document.createElement("td");
                            const title = document.createElement("td");
                            const name = document.createElement("td");
                            const date = document.createElement("td");
                            const hit = document.createElement("td");

                            num.textContent = list.num;
                            const link = document.createElement("a");
                            link.href = `./board_info_supplements_view.php?num=${list.num}&page=${page}`;
                            link.textContent = list.title;
                            title.appendChild(link);
                            const message = document.createElement("a");
                            message.href = `./message.php?name=${list.name}`;
                            message.textContent = list.name;
                            name.appendChild(message);
                            date.textContent = list.regist_day;
                            hit.textContent = list.hit;

                            newRow.appendChild(num);
                            newRow.appendChild(title);
                            newRow.appendChild(name);
                            newRow.appendChild(date);
                            newRow.appendChild(hit);
                            boardList.appendChild(newRow);
                        });
                    }
                } else {
                    alert("데이터베이스 조회에 실패했습니다.");
                }
            };
            xhr.onerror = function() {
                alert("페이지 로드에 실패했습니다.");
            };
            xhr.send();
        }

        function createPaginationButtons(currentPage, totalPages) {
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement("button");
                button.textContent = i;
                if (i === currentPage) {
                    button.classList.add("active");
                    currentPage = i;
                }
                button.addEventListener("click", function() {
                    const pageNumber = i;
                    currentPage = pageNumber;
                    boardList.innerHTML = '';
                    loadNoticeBoard(pageNumber);
                    updatePaginationButtons(pageNumber, totalPages);
                    history.pushState(null, null, `?page=${pageNumber}`);
                });
                pagination.appendChild(button);
            }
        }

        function updatePaginationButtons(currentPage) {
            const buttons = document.querySelectorAll("#pagination button");
            buttons.forEach(button => {
                button.classList.remove("active");
                if (button.textContent == currentPage) {
                    button.classList.add("active");
                }
            });
        }

        loadNoticeBoard(1);

        const xhr = new XMLHttpRequest();
        xhr.open('GET', './php/board_info_supplements_read.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                const totalPosts = data.totalItems;
                const totalPages = Math.ceil(totalPosts / 10);
                createPaginationButtons(1, totalPages);
            } else {
                alert("데이터베이스 조회에 실패했습니다.");
            }
        };
        xhr.onerror = function() {
            alert("페이지 로드에 실패했습니다.");
        };
        xhr.send();
    });
});
