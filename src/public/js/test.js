
function openModal(index) {
    var modal = document.getElementById('modal');
    var modalContent = document.getElementById('modal-content');

    modal.style.display = "block";

    axios.get('/admin/contact/' + index)
        .then(function (response) {
            // データをモーダル内の各項目にセット
            var data = response.data;
            modalContent.querySelector('.modal-content__table-name td').innerText = data.first_name + ' ' + data.last_name;
            modalContent.querySelector('.modal-content__table-gender td').innerText =
                data.gender == 1 ? '男性' :
                    data.gender == 2 ? '女性' : 'その他';
            modalContent.querySelector('.modal-content__table-email td').innerText = data.email;
            modalContent.querySelector('.modal-content__table-address td').innerText = data.address;
            modalContent.querySelector('.modal-content__table-building td').innerText = data.building;
            modalContent.querySelector('.modal-content__table-category td').innerText =
                data.category_id == 1 ? '商品のお届けについて' :
                    data.category_id == 2 ? '商品の交換について' :
                        data.category_id == 3 ? '商品トラブル' :
                            data.category_id == 4 ? 'ショップへの問い合わせ' : 'その他';
            modalContent.querySelector('.modal-content__table-detail td').innerText = data.detail;
        })
        .catch(function (error) {
            console.error('エラーが発生しました', error);
        });
}

// ×閉じ
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


