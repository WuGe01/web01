function Xchg(e1,e2) {
    let img1=$(`#chg${e1}`).find('img')[0].src
    let text1=$(`#chg${e1}`).find("input[name='text[]']")[0].value
    let ord1=$(`#chg${e1}`).find("input[name='ord[]']")[0].value
    let name1=$(`#chg${e1}`).find("input[name='name[]']")[0].value
    let select1=$(`#chg${e1}`).find("select")[0].innerHTML
    
    let img2=$(`#chg${e2}`).find('img')[0].src
    let text2=$(`#chg${e2}`).find("input[name='text[]']")[0].value
    let ord2=$(`#chg${e2}`).find("input[name='ord[]']")[0].value
    let name2=$(`#chg${e2}`).find("input[name='name[]']")[0].value
    let select2=$(`#chg${e2}`).find("select")[0].innerHTML

    $(`#chg${e1}`).find("input[name='ord[]']")[0].value=ord2
    $(`#chg${e2}`).find("input[name='ord[]']")[0].value=ord1
    $(`#chg${e1}`).find('img')[0].src=img2
    $(`#chg${e2}`).find('img')[0].src=img1
    $(`#chg${e1}`).find("input[name='name[]']")[0].value=name2
    $(`#chg${e2}`).find("input[name='name[]']")[0].value=name1
    $(`#chg${e1}`).find("input[name='text[]']")[0].value=text2
    $(`#chg${e2}`).find("input[name='text[]']")[0].value=text1
    $(`#chg${e1}`).find("select")[0].innerHTML=select2
    $(`#chg${e2}`).find("select")[0].innerHTML=select1
    console.log(e1,e2)
}