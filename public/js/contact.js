function check(){
    
    if(global.form.name.value==""){
        alert("名前が入力されていません");
        return false;
    }
    if(global.form.text.value==""){
        alert("テキストが入力されていません")
        return false;
    }
    if(global.form.age.value==""){
        alert("年齢が入力されていません。")
        return false;
    }else if(global.form.age.value<=0){
        alert(" 0以上の数字を入力してください。")
        return false;
    }
    
}