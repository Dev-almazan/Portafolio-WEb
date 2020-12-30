

 // GRAFICOS PARA HABILIDADES

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['HTML5', 'CS33', 'JAVA SCRIPT', 'PHP', 'MYSQL', 'BOOTSTRAP', 'J QUERY'],
        datasets: [{
            label: 'Nivel',
            backgroundColor: 'rgb(115, 99, 132)',
            borderColor: 'rgb(115, 99, 132)',
            data: [0, 25, 50, 75, 90, 100]
        }]
    },

    // Configuration options go here
    options: {}
});