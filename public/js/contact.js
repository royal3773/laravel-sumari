
function check(){
    const form = document.forms.form;
    // 名前の値のチェック
    if(form.name.value==""){
        alert("名前が入力されていません。");
        return false;
    }
    // 年齢の値のチェック
    if(form.age.value==""){
        alert("年齢が入力されていません。");
        return false;
    }else if(form.age.value < 0){
        alert("年齢が不正です。");
        return false;
    }else if(form.age.value >= 151){
        alert("年齢が不正です。");
        return false;
    }
    // 性別の値のチェック
    if(form.sex.value==""){
        alert("性別を選択して下さい。");
        return false;
    }
    // お問い合わせ内容のチェック
    if(form.text.value==""){
        alert("お問い合わせが入力されていません。");
        return false;
    }
    const regexp = /[\u{3000}-\u{301C}\u{3041}-\u{3093}\u{309B}-\u{309E}]/mu;
    if(form.file.value != null){
        let filename = form.file.value
        let pos = filename.lastIndexOf('.');
        pos = filename.slice(pos + 1);
        filename = filename.replace("." + pos, "");
        filename = filename.split('\\').pop().split('/').pop();
        for(let i=0; i<filename.length; i++){
            regexp.test(filename.charAt(i));
            alert("ファイル名に日本語は使用できません。");
            return false;
        }
    }
}