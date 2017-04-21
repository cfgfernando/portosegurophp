var rel1 = new Chart(document.getElementById("rel1"), {
    type: tipo,
    data: {
        labels: lista_dias,
        datasets: [{
            label: 'Receita',
            data: lista_venda,
            fill: false,
            backgroundColor: '#0000FF',
            borderColor: '#0000FF'
        }]
    }
});