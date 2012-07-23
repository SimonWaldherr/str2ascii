function str2ascii(str, del)
  {
    var ascii = '';
    var i = 0;
    while(i < str.length)
      {
        ascii += str.charCodeAt(i);
        if(i < str.length-1)
          {
            ascii += del;
          }
        i++;
      }
    return ascii;
  }

function ascii2str(ascii, del)
  {
    var str = '';
    ascii = ascii.split(del);
    for(var i in ascii)
      {
        str += String.fromCharCode(ascii[i]);
      }
    return str;
  }