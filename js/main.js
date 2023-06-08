const userRank = document.getElementById("userRank");
const noticeBoard = document.getElementById("noticeBoard");
const freeBoard = document.getElementById("freeBoard");
const workoutBoard = document.getElementById("workoutBoard");
const todayBoard = document.getElementById("todayBoard");


document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("load", function() {
        function loadUserRank(){
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './php/load_user_rank.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let row = 1;
            xhr.onload = function() {
                if(xhr.status === 200){
                    const data = JSON.parse(xhr.responseText);
                    if(data.length === 0){
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "등록된 회원이 없습니다.";
                        nullCell.colSpan = 4;
                        nullRow.appendChild(nullCell);
                        userRank.style.height = "400px";
                        userRank.appendChild(nullRow);
                    }
                    data.forEach(list => {
                        const newRow = document.createElement("tr");
                        const rank = document.createElement("td");
                        const name = document.createElement("td");
                        const point = document.createElement("td");

                        rank.textContent = row;
                        const message = document.createElement("a");
                        message.href = `./message.php?name=${list.name}`;
                        message.textContent = list.name;
                        name.appendChild(message);
                        point.textContent = list.point;
                        if(row <= 3){
                            rank.style.color = 'red';
                            rank.style.fontWeight = 'bold';
                            name.style.fontWeight = 'bold';
                            point.style.fontWeight = 'bold';
                        }
                        ++row;

                        newRow.appendChild(rank);
                        newRow.appendChild(name);
                        newRow.appendChild(point);
                        userRank.appendChild(newRow);
                    })
                } else{
                    alert("데이터베이스 조회에 실패했습니다..");
                }
            };
            xhr.onerror = function(){
                alert("페이지 로드에 실패했습니다..");
            };
            xhr.send();
        }
        function loadNoticeBoard(){
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './php/load_notice_board.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let row = 1;
            xhr.onload = function() {
                if(xhr.status === 200){
                    const data = JSON.parse(xhr.responseText);
                    if(data.length === 0){
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "게시물이 없습니다.";
                        nullCell.colSpan = 4;
                        nullRow.appendChild(nullCell);
                        noticeBoard.style.height = "200px";
                        noticeBoard.appendChild(nullRow);
                    }
                    data.forEach(list => {
                        const newRow = document.createElement("tr");
                        const num = document.createElement("td");
                        const title = document.createElement("td");
                        const name = document.createElement("td");
                        const date = document.createElement("td");

                        num.textContent = row;
                        const link = document.createElement("a");
                        link.href = `./board_notice_view.php?num=${list.num}&page=1`;
                        link.textContent = list.title;
                        title.appendChild(link);
                        const message = document.createElement("a");
                        message.href = `./message.php?name=${list.name}`;
                        message.textContent = list.name;
                        name.appendChild(message);
                        date.textContent = list.regist_day;
                        ++row;

                        newRow.appendChild(num);
                        newRow.appendChild(title);
                        newRow.appendChild(name);
                        newRow.appendChild(date);
                        noticeBoard.appendChild(newRow);
                    })
                } else{
                    alert("데이터베이스 조회에 실패했습니다..");
                }
            };
            xhr.onerror = function(){
                alert("페이지 로드에 실패했습니다..");
            };
            xhr.send();
        }
        function loadFreeBoard(){
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './php/load_free_board.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let row = 1;
            xhr.onload = function() {
                if(xhr.status === 200){
                    const data = JSON.parse(xhr.responseText);
                    if(data.length === 0){
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "게시물이 없습니다.";
                        nullCell.colSpan = 4;
                        nullRow.appendChild(nullCell);
                        freeBoard.style.height = "200px";
                        freeBoard.appendChild(nullRow);
                    }
                    data.forEach(list => {
                        const newRow = document.createElement("tr");
                        const num = document.createElement("td");
                        const title = document.createElement("td");
                        const name = document.createElement("td");
                        const date = document.createElement("td");

                        num.textContent = row;
                        const link = document.createElement("a");
                        link.href = `./board_free_view.php?num=${list.num}&page=1`;
                        link.textContent = list.title;
                        title.appendChild(link);
                        const message = document.createElement("a");
                        message.href = `./message.php?name=${list.name}`;
                        message.textContent = list.name;
                        name.appendChild(message);
                        date.textContent = list.regist_day;
                        ++row;

                        newRow.appendChild(num);
                        newRow.appendChild(title);
                        newRow.appendChild(name);
                        newRow.appendChild(date);
                        freeBoard.appendChild(newRow);
                    })
                } else{
                    alert("데이터베이스 조회에 실패했습니다..");
                }
            };
            xhr.onerror = function(){
                alert("페이지 로드에 실패했습니다..");
            };
            xhr.send();
        }
        function loadWorkoutBoard(){
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './php/load_work_out.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let row = 1;
            xhr.onload = function() {
                if(xhr.status === 200){
                    const data = JSON.parse(xhr.responseText);
                    if(data.length === 0){
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "게시물이 없습니다.";
                        nullCell.colSpan = 4;
                        nullRow.appendChild(nullCell);
                        workoutBoard.style.height = "200px";
                        workoutBoard.appendChild(nullRow);
                    }
                    data.forEach(list => {
                        const newRow = document.createElement("tr");
                        const num = document.createElement("td");
                        const title = document.createElement("td");
                        const name = document.createElement("td");
                        const date = document.createElement("td");

                        num.textContent = row;
                        const link = document.createElement("a");
                        link.href = `./board_info_workout_view.php?num=${list.num}&page=1`;
                        link.textContent = list.title;
                        title.appendChild(link);
                        const message = document.createElement("a");
                        message.href = `./message.php?name=${list.name}`;
                        message.textContent = list.name;
                        name.appendChild(message);
                        date.textContent = list.regist_day;
                        ++row;

                        newRow.appendChild(num);
                        newRow.appendChild(title);
                        newRow.appendChild(name);
                        newRow.appendChild(date);
                        workoutBoard.appendChild(newRow);
                    })
                } else{
                    alert("데이터베이스 조회에 실패했습니다..");
                }
            };
            xhr.onerror = function(){
                alert("페이지 로드에 실패했습니다..");
            };
            xhr.send();
        }
        function loadTodayBoard(){
            const xhr = new XMLHttpRequest();
            xhr.open('GET', './php/load_today_board.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let row = 1;
            xhr.onload = function() {
                if(xhr.status === 200){
                    const data = JSON.parse(xhr.responseText);
                    if(data.length === 0){
                        const nullRow = document.createElement("tr");
                        const nullCell = document.createElement("td");
                        nullCell.textContent = "게시물이 없습니다.";
                        nullCell.colSpan = 4;
                        nullRow.appendChild(nullCell);
                        todayBoard.style.height = "200px";
                        todayBoard.appendChild(nullRow);
                    }
                    data.forEach(list => {
                        const newRow = document.createElement("tr");
                        const num = document.createElement("td");
                        const title = document.createElement("td");
                        const name = document.createElement("td");
                        const date = document.createElement("td");

                        num.textContent = row;
                        const link = document.createElement("a");
                        link.href = `./board_today_view.php?num=${list.num}&page=1`;
                        link.textContent = list.title;
                        title.appendChild(link);
                        const message = document.createElement("a");
                        message.href = `./message.php?name=${list.name}`;
                        message.textContent = list.name;
                        name.appendChild(message);
                        date.textContent = list.regist_day;
                        ++row;

                        newRow.appendChild(num);
                        newRow.appendChild(title);
                        newRow.appendChild(name);
                        newRow.appendChild(date);
                        todayBoard.appendChild(newRow);
                    })
                } else{
                    alert("데이터베이스 조회에 실패했습니다..");
                }
            };
            xhr.onerror = function(){
                alert("페이지 로드에 실패했습니다..");
            };
            xhr.send();
        }
        loadUserRank();
        loadNoticeBoard();
        loadWorkoutBoard();
        loadFreeBoard();
        loadTodayBoard();
    });
});
