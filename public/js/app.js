/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./common */ "./resources/js/common.js");

__webpack_require__(/*! ./datatable */ "./resources/js/datatable.js");

__webpack_require__(/*! ./user */ "./resources/js/user.js"); // $(document).ready(function () {
//   // data-tables
//   $('#example1').DataTable();
//   // counter-up
//   $('.counter').counterUp({
//     delay: 10,
//     time: 600
//   });
// });
// var ctx1 = document.getElementById("lineChart").getContext('2d');
// var lineChart = new Chart(ctx1, {
//   type: 'bar',
//   data: {
//     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
//     datasets: [{
//       label: 'Dataset 1',
//       backgroundColor: '#3EB9DC',
//       data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
//     }, {
//       label: 'Dataset 2',
//       backgroundColor: '#EBEFF3',
//       data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
//     }]
//   },
//   options: {
//     tooltips: {
//       mode: 'index',
//       intersect: false
//     },
//     responsive: true,
//     scales: {
//       xAxes: [{
//         stacked: true,
//       }],
//       yAxes: [{
//         stacked: true
//       }]
//     }
//   }
// });
// var ctx2 = document.getElementById("pieChart").getContext('2d');
// var pieChart = new Chart(ctx2, {
//   type: 'pie',
//   data: {
//     datasets: [{
//       data: [12, 19, 3, 5, 2, 3],
//       backgroundColor: [
//         'rgba(255,99,132,1)',
//         'rgba(54, 162, 235, 1)',
//         'rgba(255, 206, 86, 1)',
//         'rgba(75, 192, 192, 1)',
//         'rgba(153, 102, 255, 1)',
//         'rgba(255, 159, 64, 1)'
//       ],
//       label: 'Dataset 1'
//     }],
//     labels: [
//       "Red",
//       "Orange",
//       "Yellow",
//       "Green",
//       "Blue"
//     ]
//   },
//   options: {
//     responsive: true
//   }
// });
// var ctx3 = document.getElementById("doughnutChart").getContext('2d');
// var doughnutChart = new Chart(ctx3, {
//   type: 'doughnut',
//   data: {
//     datasets: [{
//       data: [12, 19, 3, 5, 2, 3],
//       backgroundColor: [
//         'rgba(255,99,132,1)',
//         'rgba(54, 162, 235, 1)',
//         'rgba(255, 206, 86, 1)',
//         'rgba(75, 192, 192, 1)',
//         'rgba(153, 102, 255, 1)',
//         'rgba(255, 159, 64, 1)'
//       ],
//       label: 'Dataset 1'
//     }],
//     labels: [
//       "Red",
//       "Orange",
//       "Yellow",
//       "Green",
//       "Blue"
//     ]
//   },
//   options: {
//     responsive: true
//   }
// });

/***/ }),

/***/ "./resources/js/common.js":
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// fadeOut flash message alert
$(document).ready(function () {
  $('.delay').delay(2000).fadeOut(2000);
}); // select checkbox + .btn-multiple status

$(document).ready(function () {
  $('#check-all').change(function () {
    $('.checkbox').prop('checked', $(this).prop('checked'));

    if ($('#check-all').prop('checked') == true) {
      $('.btn-multiple').removeAttr('style');
    }

    if ($('#check-all').prop('checked') == false) {
      $('.btn-multiple').css('display', 'none');
    }
  });
  $('.checkbox').change(function () {
    if ($(this).prop('checked') == false) {
      $('#check-all').prop('checked', false);
    }

    if ($('.checkbox:checked').length == $('.checkbox').length) {
      $('#check-all').prop('checked', true);
    }
  });

  if ($('.checkbox').prop('checked') == false) {
    $('.btn-multiple').css('display', 'none');
  }

  $('.checkbox').each(function () {
    $(this).on('change', function () {
      if ($(this).prop('checked') == true) {
        $('.btn-multiple').removeAttr('style');
      }

      if ($('.checkbox:checked').length == 0) {
        $('.btn-multiple').css('display', 'none');
      }
    });
  });
});

/***/ }),

/***/ "./resources/js/datatable.js":
/*!***********************************!*\
  !*** ./resources/js/datatable.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('#example1').DataTable();
}); // END CODE FOR BASIC DATA TABLE 
// START CODE FOR Child rows (show extra / detailed information) DATA TABLE 

function format(d) {
  // `d` is the original data object for the row
  return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' + '<tr>' + '<td>Full name:</td>' + '<td>' + d.name + '</td>' + '</tr>' + '<tr>' + '<td>Extension number:</td>' + '<td>' + d.extn + '</td>' + '</tr>' + '<tr>' + '<td>Extra info:</td>' + '<td>And any further details here (images etc)...</td>' + '</tr>' + '</table>';
}

$(document).ready(function () {
  var table = $('#example2').DataTable({
    "ajax": "assets/data/dataTablesObjects.txt",
    "columns": [{
      "className": 'details-control',
      "orderable": false,
      "data": null,
      "defaultContent": ''
    }, {
      "data": "name"
    }, {
      "data": "position"
    }, {
      "data": "office"
    }, {
      "data": "salary"
    }],
    "order": [[1, 'asc']]
  }); // Add event listener for opening and closing details

  $('#example2 tbody').on('click', 'td.details-control', function () {
    var tr = $(this).closest('tr');
    var row = table.row(tr);

    if (row.child.isShown()) {
      // This row is already open - close it
      row.child.hide();
      tr.removeClass('shown');
    } else {
      // Open this row
      row.child(format(row.data())).show();
      tr.addClass('shown');
    }
  });
}); // END CODE FOR Child rows (show extra / detailed information) DATA TABLE 		
// START CODE Show / hide columns dynamically DATA TABLE 		

$(document).ready(function () {
  var table = $('#example3').DataTable({
    "scrollY": "350px",
    "paging": false
  });
  $('a.toggle-vis').on('click', function (e) {
    e.preventDefault(); // Get the column API object

    var column = table.column($(this).attr('data-column')); // Toggle the visibility

    column.visible(!column.visible());
  });
}); // END CODE Show / hide columns dynamically DATA TABLE 	
// START CODE Individual column searching (text inputs) DATA TABLE 		

$(document).ready(function () {
  // Setup - add a text input to each footer cell
  $('#example4 thead th').each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="Search ' + title + '" />');
  }); // DataTable

  var table = $('#example4').DataTable(); // Apply the search

  table.columns().every(function () {
    var that = this;
    $('input', this.header()).on('keyup change', function () {
      if (that.search() !== this.value) {
        that.search(this.value).draw();
      }
    });
  });
});

/***/ }),

/***/ "./resources/js/user.js":
/*!******************************!*\
  !*** ./resources/js/user.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// delete single user
$(document).ready(function () {
  $('#delete').on('shown.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    $('#agree-delete').on('click', function () {
      $.ajax({
        type: "DELETE",
        cache: false,
        url: $(this).data('url'),
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
        },
        data: {
          id: id
        },
        success: function success(data, status) {
          if (status == 'success') {
            $('button[data-id = ' + data.id + ']').parents('tr').fadeOut();
            showAlert(data.flash_level, data.flash_message);
          }
        }
      });
    });
  });
}); // multiple-delete users

$(document).ready(function () {
  $('#multipleDelete').on('shown.bs.modal', function (e) {
    var ids = [];
    $('.checkbox:checked').each(function () {
      ids.push($(this).data('id'));
    });

    if (ids.length > 0) {
      $('#agree-multiple-delete').on('click', function () {
        $.ajax({
          type: "DELETE",
          cache: false,
          url: $(this).data('url'),
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
          },
          data: {
            ids: ids
          },
          success: function success(data, status) {
            if (status == 'success') {
              $('.checkbox:checked').each(function () {
                $(this).parents('tr').fadeOut();
              });
              showAlert(data.flash_level, data.flash_message);
            }
          }
        });
      });
    }
  });
});

function showAlert($class, $message) {
  var alert = '';
  alert += '<div class="alert ' + $class + ' alert-dismissible fade show mb-3" role = "alert" >';
  alert += '<p class="m-0">' + $message + '</p>';
  alert += '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
  alert += '<span aria-hidden="true">×</span>';
  alert += '</button>';
  alert += '</div>';
  $('.breadcrumb-holder').after(alert);
  $('.delay').delay(2000).fadeOut(2000);
}

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /media/hongdung6992/Data/ecommerce_laravel/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /media/hongdung6992/Data/ecommerce_laravel/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });