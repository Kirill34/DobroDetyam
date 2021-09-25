function hideAll()
{
    var blocks=document.getElementsByClassName('serviceblock');

    for (let item of blocks)
    {
        item.hidden=true
    }
}

function allYellow()
{
    var navs = document.getElementsByClassName('nav-item')

    for (let item of navs)
    {
        item.style.background="#FFFFAC"
    }
}