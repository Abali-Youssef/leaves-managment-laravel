window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            document.body.classList.toggle('sb-sidenav-toggled');
        }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
    


    
});

//this to handle form validation before submission (before sending request) check "onclick" property in each button
function submitForm(event,message,action){
    var button = event.target; // Get the clicked button element

  event.preventDefault();
  
  Swal.fire({
  title: message,

  showCancelButton: true,
  confirmButtonText: action,
  cancelButtonText: 'Annuler',

  }).then((result) => {
      if (result.isConfirmed) {
        var form = button.closest('form'); // Find the first parent form element
        form.submit();
      } 
  })
  }



//   area chart script 

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");

async function fetchData() {
 var res=[0,0,0,0,0,0,0,0,0,0,0,0]
  return new Promise(function(resolve, reject) {
  
  $.ajax({
      
  type: "GET",
  url: "/congeByMonths" ,
  dataType: "json",
  success:  function (response) {
      for (var i = 0; i < response.data.length; i++) {
         res[response.data[i].month-1]=response.data[i].total_leaves
      }
      resolve(res);
  }
});
});
}
var result;
async function processData() {
  try {
    result = await fetchData();
    // Le code ici ne s'exécutera que lorsque les données seront disponibles
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels:  [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre"
          ],
        datasets: [{
          label: "Total des congés",
          lineTension: 0.3,
          backgroundColor: "rgba(2,117,216,0.2)",
          borderColor: "rgba(2,117,216,1)",
          pointRadius: 5,
          pointBackgroundColor: "rgba(2,117,216,1)",
          pointBorderColor: "rgba(255,255,255,0.8)",
          pointHoverRadius: 5,
          pointHoverBackgroundColor: "rgba(2,117,216,1)",
          pointHitRadius: 50,
          pointBorderWidth: 2,
          data: result,
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false
            },
            ticks: {
              maxTicksLimit: 7
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 20,
              maxTicksLimit: 5
            },
            gridLines: {
              color: "rgba(0, 0, 0, .125)",
            }
          }],
        },
        legend: {
          display: false
        }
      }
    });
  } catch (error) {
    console.error('Erreur lors de la récupération des données:', error);
  }
}
processData();



