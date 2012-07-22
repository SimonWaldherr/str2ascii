function str2ascii(str, del)
  {
    var ascii = '';
    str = str.split(del);
    for(var i in str)
      {
        ascii += str[i].charCodeAt(0);
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