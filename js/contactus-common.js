'use strict';

$(function(){

    $('#contactUsModal').on('shown.bs.modal', function() {
        $('#contactUsSession').bootstrapValidator('resetForm', true);
    });

    $('#contactUsSession').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            contactus_firstname: {
                message: 'The firstname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The firstname is required and cannot be empty'
                    }
                }
            },
            contactus_surname: {
                message: 'The surname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The surname is required and cannot be empty'
                    }
                }
            },
            contactus_email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            contactus_mob: {
                validators: {
                    notEmpty: {
                        message: 'The mobile number is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^04[0-9]{8}$/i,
                        message: 'Mobile number must start with 04 and be digits only'
                    }
                }
            },
            'contactus_subjCheckbox[]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Please choose at least one subject'
                    }
                }
            },
            'contactus_dayOfWeekCheckbox[]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Please choose at least one day of the week'
                    }
                }
            },
            'contactus_timeOfDayCheckbox[]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Please choose at least one time of day'
                    }
                }
            }
        }
    });
});

function preloadImages() {
    var d=document; if(d.images){ if(!d.MM_p) d.p=new Array();
        var i,j=d.p.length,a=preloadImages.arguments; for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){ d.p[j]=new Image; d.p[j++].src=a[i];}}
}
function swapImgRestore() { //v3.0
    var i,x,a=document.sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function swapImage() { //v3.0
    var i,j=0,x,a=swapImage.arguments; document.sr=new Array; for(i=0;i<(a.length-2);i+=3)
        if ((x=findObj(a[i]))!=null){document.sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
    var i,p,q,nm,test,num,min,max,errors='',val,args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
        if (val) { nm=val.name; if ((val=val.value)!="") {
            if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
                if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
            } else if (test!='R') { num = parseFloat(val);
                if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
                if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
                    min=test.substring(8,p); max=test.substring(p+1);
                    if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
                } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
}
function MM_goToURL() { //v3.0
    var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
    for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-32906721-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();