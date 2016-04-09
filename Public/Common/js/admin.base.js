//根据className寻找父元素
function findParentByClassName(className, childNode){
    var p = $(childNode).parent();
    while(!p.hasClass(className)  && p[0] != window){
        p = p.parent();
    }
    return p;
}
//根据TagName寻找父元素
function findParentByTagName(tagName, childNode){
    var p = $(childNode).parent();
    while(p[0].tagName.toLowerCase() != tagName && p[0] != window){
        p = p.parent();
    }
    return p;
}