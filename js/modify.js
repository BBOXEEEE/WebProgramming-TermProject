// DOM 요소들을 선택합니다.
const nameInput = document.querySelector('input[name="username"]');
const idInput = document.querySelector('input[name="id"]');
const pwInput = document.querySelector('input[name="pw"]');
const pwCheckInput = document.querySelector('input[name="pwcheck"]');
const emailInput = document.querySelector('input[name="email"]');
const phoneInput = document.querySelector('input[name="phone"]');
const pwIcon = document.querySelector('#pw');
const pwCheckIcon = document.querySelector('#check');
const modifyForm = document.querySelector('form[name="modifyForm"]');
const modifyButton = document.querySelector('.modify');
const cancelButton = document.querySelector(".cancel");

function checkInput(event){
    event.preventDefault(); 
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
    modifyForm.submit();
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

function resetInput(){
    pwInput.value = "";
    pwCheckInput.value = "";
    emailInput.value = "";
    phoneInput = "";
  
    pwInput.focus();
    return;
}

// 비밀번호 확인이 변경될 때마다 checkPassword 함수를 호출합니다.
pwCheckInput.addEventListener('input', checkPassword);
// Cancel 버튼
cancelButton.addEventListener('click', resetInput);