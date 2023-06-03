// DOM 요소들을 선택합니다.
const nameInput = document.querySelector('input[name="username"]');
const idInput = document.querySelector('input[name="id"]');
const pwInput = document.querySelector('input[name="pw"]');
const pwCheckInput = document.querySelector('input[name="pwcheck"]');
const emailInput = document.querySelector('input[name="email"]');
const phoneInput = document.querySelector('input[name="phone"]');
const message = document.querySelector('.message');
const pwIcon = document.querySelector('#pw');
const pwCheckIcon = document.querySelector('#check');
const signupForm = document.querySelector('form[name="signupForm"]');
const signupButton = document.querySelector('.signup');

function checkInput(event){
    event.preventDefault(); 

    if(!nameInput.value){
        alert("이름을 입력하세요!");
        nameInput.focus();
        return;
    }
    if(!idInput.value){
        alert("아이디를 입력하세요!");
        idInput.focus();
        return;
    }
    if(!pwInput.value){
        alert("비밀번호를 입력하세요!");
        pwInput.focus();
        return;
    }
    if(!pwCheckInput.value){
        alert("비밀번호 확인을 입력하세요!");
        pwCheckInput.focus();
        return;
    }
    if(!emailInput.value){
        alert("이메일을 입력하세요!");
        emailInput.focus();
        return;
    }
    if(!phoneInput.value){
        alert("전화번호를 입력하세요!");
        phoneInput.focus();
        return;
    }
    console.log(pwInput);
    console.log(pwCheckInput);
    if(pwInput.value != pwCheckInput.value){
        alert("비밀번호가 일치하지 않습니다! \n 다시 입력하세요!");
        pwInput.focus();
        pwCheckInput.focus();
        return;
    }
    signupForm.submit();
}

// 비밀번호와 비밀번호 확인이 일치하는지 확인하는 함수를 정의합니다.
function checkPassword() {
  if (pwInput.value === pwCheckInput.value) {
    pwIcon.style.color = 'green';
    pwCheckIcon.style.color = 'green'; // 일치할 경우 초록색으로 설정
  } else {
    pwIcon.style.color = 'red';
    pwCheckIcon.style.color = 'red'; // 일치하지 않을 경우 빨간색으로 설정
  }
}

function checkDuplicate(){
    const id = idInput.value.trim();
    if(id === ''){
        message.innerHTML = '';
        return;
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', './php/check_duplicate.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if(xhr.status === 200){
            const response = JSON.parse(xhr.responseText);

            if(response.duplicate){
                message.innerHTML = '<p style="color: red; margin-bottom: 10px">중복된 아이디입니다.</p>';
            }
            else{
                message.innerHTML = '<p style="color: green;">사용 가능한 아이디입니다.</p>';
            }
        } else{
            message.innerHTML = '<p style="color: red;">중복 여부 확인에 11실패했습니다..</p>';
        }
    };
    xhr.onerror = function(){
        message.innerHTML = '<p style="color: red;">중복 여부 확인에 실패했습니다..</p>';
    };

    const data = 'id=' + encodeURIComponent(id);
    xhr.send(data);
}

idInput.addEventListener('blur', checkDuplicate);
// 비밀번호 확인이 변경될 때마다 checkPassword 함수를 호출합니다.
pwCheckInput.addEventListener('input', checkPassword);
// Submit 버튼을 클릭하면 handleSubmit 함수를 호출합니다.
signupButton.addEventListener('click', checkInput);