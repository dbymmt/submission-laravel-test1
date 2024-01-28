
function openModal(index) {
    var modal = document.getElementById('modal');
    var rowData = document.querySelector('[data-tr="' + index + '"]').getElementsByTagName('td');
    var modalContent = document.getElementById('modal-content');

    modal.style.display = "block";

    var testID = document.getElementById('modal-content__table-id').getElementsByTagName('td')[0];
    console.log(testID);
    testID.innerText = index;

    // モーダルウィンドウにデータをセット
    // modalContent.innerHTML = "<strong>お名前:</strong> " + rowData[0].innerText + "<br>" +
    //     "<strong>性別:</strong> " + rowData[1].innerText + "<br>" +
    //     "<strong>メールアドレス:</strong> " + rowData[2].innerText + "<br>" +
    //     "<strong>お問い合わせ種類:</strong> " + rowData[3].innerText;
}

function closeModal() {
    var modal = document.getElementById('modal');
    modal.style.display = "none";
}

// 画面外をクリックしたときにモーダルウィンドウを閉じる
window.onclick = function (event) {
    if (event.target.className == "modal") {
        event.target.style.display = "none";
    }
}


// window.addEventListener('load', () => {

//     function testClick(index) {
//         const test = 'test' + index;
//         console.log(test);
//     };
// });

