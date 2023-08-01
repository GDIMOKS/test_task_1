// let params = ["param1", "1231"]
// console.log(setGetParams(params))


function setGetParams(newGetParams) {
    let newString = "";
    for(let key in newGetParams)
        newString += (newString ? '&' : '') + key + '=' + newGetParams[key];

    return window.location.href + '?' + newString
}
