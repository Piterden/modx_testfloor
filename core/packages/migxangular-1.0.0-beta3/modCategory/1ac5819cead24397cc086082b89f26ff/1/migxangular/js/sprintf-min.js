
(function(window){var sprintf=function(format){if(typeof format!='string'){throw"sprintf: The first arguments need to be a valid format string.";}
var r=new RegExp(/%(\+)?([0 ]|'(.))?(-)?([0-9]+)?(\.([0-9]+))?([%bcdfosxX])/g);var parts=[];var paramIndex=1;while(part=r.exec(format)){if((paramIndex>=arguments.length)&&(part[8]!='%')){throw"sprintf: At least one argument was missing.";}
parts[parts.length]={begin:part.index,end:part.index+part[0].length,sign:(part[1]=='+'),negative:(parseFloat(arguments[paramIndex])<0)?true:false,padding:(part[2]==undefined)?(' '):((part[2].substring(0,1)=="'")?(part[3]):(part[2])),alignLeft:(part[4]=='-'),width:(part[5]!=undefined)?part[5]:false,precision:(part[7]!=undefined)?part[7]:false,type:part[8],data:(part[8]!='%')?String(arguments[paramIndex++]):false};}
var newString="";var start=0;for(var i=0;i<parts.length;++i){newString+=format.substring(start,parts[i].begin);start=parts[i].end;var preSubstitution="";switch(parts[i].type){case'%':preSubstitution="%";break;case'b':preSubstitution=Math.abs(parseInt(parts[i].data)).toString(2);break;case'c':preSubstitution=String.fromCharCode(Math.abs(parseInt(parts[i].data)));break;case'd':preSubstitution=String(Math.abs(parseInt(parts[i].data)));break;case'f':preSubstitution=(parts[i].precision==false)?(String((Math.abs(parseFloat(parts[i].data))))):(Math.abs(parseFloat(parts[i].data)).toFixed(parts[i].precision));break;case'o':preSubstitution=Math.abs(parseInt(parts[i].data)).toString(8);break;case's':preSubstitution=parts[i].data.substring(0,parts[i].precision?parts[i].precision:parts[i].data.length);break;case'x':preSubstitution=Math.abs(parseInt(parts[i].data)).toString(16).toLowerCase();break;case'X':preSubstitution=Math.abs(parseInt(parts[i].data)).toString(16).toUpperCase();break;default:throw'sprintf: Unknown type "'+parts[i].type+'" detected. This should never happen. Maybe the regex is wrong.';}
if(parts[i].type=="%"){newString+=preSubstitution;continue;}
if(parts[i].width!=false){if(parts[i].width>preSubstitution.length)
{var origLength=preSubstitution.length;for(var j=0;j<parts[i].width-origLength;++j)
{preSubstitution=(parts[i].alignLeft==true)?(preSubstitution+parts[i].padding):(parts[i].padding+preSubstitution);}}}
if(parts[i].type=='b'||parts[i].type=='d'||parts[i].type=='o'||parts[i].type=='f'||parts[i].type=='x'||parts[i].type=='X'){if(parts[i].negative==true){preSubstitution="-"+preSubstitution;}
else if(parts[i].sign==true){preSubstitution="+"+preSubstitution;}}
newString+=preSubstitution;}
newString+=format.substring(start,format.length);return newString;};window.sprintf=sprintf;String.prototype.printf=function(){var newArguments=Array.prototype.slice.call(arguments);newArguments.unshift(String(this));return sprintf.apply(undefined,newArguments);}})(window);