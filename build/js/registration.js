
$( document ).ready(function() {
  if(localStorage.fname !== undefined){

    document.getElementById("fname").value = localStorage.fname;
    document.getElementById("mname").value = localStorage.mname;
    document.getElementById("lname").value = localStorage.lname;
    document.getElementById("birthdate").value = localStorage.birthdate;
    document.getElementById("birthplace").value = localStorage.birthplace;
    document.getElementById("citizenship").value = localStorage.citizenship;
    document.getElementById("fernandinonum").value = localStorage.fernandinonum;
    document.getElementById("housenum").value = localStorage.housenum;
    document.getElementById("brgy").value = localStorage.brgy;
    document.getElementById("city").value = localStorage.city;
    document.getElementById("province").value = localStorage.province;
    document.getElementById("mobilenum").value = localStorage.mobilenum;
    document.getElementById("tin").value = localStorage.tin;
    document.getElementById("gender").value = localStorage.gender;
    document.getElementById("civilstatus").value = localStorage.civilstatus;
    document.getElementById("occupation").value = localStorage.occupation;
    document.getElementById("salary").value = localStorage.salary;
    document.getElementById("salaryper").value = localStorage.salaryper;

    document.getElementById("email").value = localStorage.email;
    document.getElementById("height").value = localStorage.height;
    document.getElementById("weight").value = localStorage.weight;
    document.getElementById("icrno").value = localStorage.icrno;

  }


  $("#frm_personalinfo").formValidation({
    framework: "bootstrap",
    icon: null,
    fields: {
      fname: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          },
          notEmpty: {
            message: ''
          }
        }
      },
      mname: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      lname: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },birthdate: {
        validators: {
          date: {
            format: 'YYYY-MM-DD',
            message: ''
          },
          notEmpty: {
            message: ''
          }
        }
      },
      birthplace: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      citizenship: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      brgy: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      city: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      province: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      gender: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      civilstatus: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      occupation: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
      salaryper: {
        validators: {
          regexp: {
            regexp: /^[0-9a-zA-ZÑñ .,-]+$/i
          },
          stringLength: {
            max: 30
          }
        }
      },
    }
   })
   .on('success.form.fv', function(e) {

   
    saveinfo();
    return false;
   }).on('err.field.fv', function(e, data) {
   
   });

});


function saveinfo(){

  localStorage.setItem("fname", $('#fname').val());
  localStorage.setItem("mname", $('#mname').val());
  localStorage.setItem("lname", $('#lname').val());
  localStorage.setItem("birthdate", $('#birthdate').val());
  localStorage.setItem("birthplace", $('#birthplace').val());
  localStorage.setItem("citizenship", $('#citizenship').val());
  localStorage.setItem("fernandinonum", $('#fernandinonum').val());
  localStorage.setItem("housenum", $('#housenum').val());
  localStorage.setItem("brgy", $('#brgy').val());
  localStorage.setItem("city", $('#city').val());
  localStorage.setItem("province", $('#province').val());
  localStorage.setItem("mobilenum", $('#mobilenum').val());
  localStorage.setItem("tin", $('#tin').val());
  localStorage.setItem("gender", $('#gender').val());
  localStorage.setItem("civilstatus", $('#civilstatus').val());
  localStorage.setItem("occupation", $('#occupation').val());
  localStorage.setItem("salary", $('#salary').val());
  localStorage.setItem("salaryper", $('#salaryper').val());

  localStorage.setItem("email", $('#email').val());
  localStorage.setItem("height", $('#height').val());
  localStorage.setItem("weight", $('#weight').val());
  localStorage.setItem("icrno", $('#icrno').val());




    $is_processing =  $('body .ui-pnotify > .alert-info').length;
    if($is_processing == 0){
      var arr = $("#frm_personalinfo").serializeObject();
          notify('Processing', 'Please wait..', 'info', 999999);
          postAjax(base_url + 'account/saveinfo/', arr,
    function(data) {
      if (data.status == "yes") {
        $('.ui-pnotify .alert-info').remove();
        $('.ui-pnotify .alert-warning').remove();
        notify('Success!', data.content, 'success', 3000);

        localStorage.setItem("refnum", data.refnum);
        localStorage.setItem("validitydate", data.validitydate);
        window.location.href = base_url + 'admin/referencenumber/';
        removeLocalStorage();
        return false;
      } else {
        $('.ui-pnotify .alert-info').remove();
        $('.ui-pnotify .alert-warning').remove();
        notify('Failed!', data.content, 'danger', 3000);
        if(data.content == 'Robot verification failed, please try again.'){
          setTimeout(function() {
            window.location.reload();
         }, 3000);
        }
        return false;
      }
    }
  );
      }
      return false;
}

function removeLocalStorage(){
  localStorage.removeItem("fname");
  localStorage.removeItem("mname");
  localStorage.removeItem("lname");
  localStorage.removeItem("birthdate");
  localStorage.removeItem("birthplace");
  localStorage.removeItem("citizenship");
  localStorage.removeItem("fernandinonum");
  localStorage.removeItem("housenum");
  localStorage.removeItem("brgy");
  localStorage.removeItem("city");
  localStorage.removeItem("province");
  localStorage.removeItem("mobilenum");
  localStorage.removeItem("gender");
  localStorage.removeItem("tin");
  localStorage.removeItem("civilstatus");
  localStorage.removeItem("occupation");
  localStorage.removeItem("salary");
  localStorage.removeItem("salaryper");

  localStorage.removeItem("email");
  localStorage.removeItem("height");
  localStorage.removeItem("weight");
  localStorage.removeItem("icrno");


}