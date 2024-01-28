
function openModal(index) {
    var modal = document.getElementById('modal');
    var rowData = document.querySelector('[data-tr="' + index + '"]').getElementsByTagName('td');
    var modalContent = document.getElementById('modal-content');

    modal.style.display = "block";

    let modal_name = document.querySelector('.modal-content__table-name td');
    let modal_gender = document.querySelector('.modal-content__table-gender td');
    let modal_email = document.querySelector('.modal-content__table-email td');
    let modal_address = document.querySelector('.modal-content__table-address td');
    let modal_building = document.querySelector('.modal-content__table-building td');
    let modal_category = document.querySelector('.modal-content__table-category td');
    let modal_detail = document.querySelector('.modal-content__table-detail td');






    
    // modal_name.innerText = rowData[0].innerText;
    // modal_gender.innerText = rowData[1].innerText;
    // modal_email.innerText = rowData[2].innerText;
    // modal_address.innerText = rowData[3].innerText;
    // modal_building.innerText = rowData[4].innerText;
    // modal_category.innerText = rowData[5].innerText;



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

