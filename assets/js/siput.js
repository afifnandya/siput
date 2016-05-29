$(document).ready(function () {
            var chart1 = $("#chart-jumlah-guru");
            var chat_jumlah_guru = new Chart(chart1, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "PNS",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "Honorer",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart2 = $("#chart-pendidikan-guru");
            var chart_pendidikan_guru = new Chart(chart2, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "S1",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "S2",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart3 = $("#chart-lama-mengajar");
            var chart_lama_mengajar = new Chart(chart3, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "1-5 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "5-10 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "10-15 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart4 = $("#chart-usia-guru");
            var chart_usia_guru = new Chart(chart4, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "30-40 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "40-50 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "50-60 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart5 = $("#chart-jumlah-siswa");
            var chart_jumlah_siswa = new Chart(chart5, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "30-40 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "40-50 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "50-60 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart6 = $("#chart-kelulusan-siswa");
            var chart_usia_guru = new Chart(chart6, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "30-40 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "40-50 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "50-60 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart9 = $("#chart-prestasi-siswa");
            var chart_prestasi_siswa = new Chart(chart9, {
                type: 'bar',
                data: {
                    labels: ["Prestasi"],
                    datasets: [
                        {           
                            label: "Akademik",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "Non Akademik",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart7 = $("#chart-kenakalan-siswa");
            var chart_kenakalan_siswa = new Chart(chart7, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "30-40 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "40-50 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "50-60 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            
            var chart8 = $("#chart-nilai-akhir-siswa");
            var chart_nilai_akhir_siswa = new Chart(chart8, {
                type: 'bar',
                data: {
                    labels: ["2015"],
                    datasets: [
                        {           
                            label: "30-40 tahun",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            data: [65],
                        },
                        {
                            label: "40-50 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [30],
                        },
                        {
                            label: "50-60 tahun",
                            backgroundColor: "rgba(255,99,132,0.2)",
                            borderColor: "rgba(255,99,132,1)",
                            data: [40],
                        }
                    ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
        });
$(document).ready(function(){
    var infra_score = parseInt($('.infra-score').text());
    var guru_score = parseInt($('.guru-score').text());
    var siswa_score = parseInt($('.siswa-score').text());
    var ekskul_score = parseInt($('.ekskul-score').text());
    var final_score = parseInt($('.final-score').text());
    var object_score = {
        ".infra-score": infra_score,
        ".guru-score": guru_score,
        ".siswa-score": siswa_score,
        ".ekskul-score": ekskul_score,
        ".final-score": final_score
};
    $.each(object_score,function(key,value){
        console.log(key + " : "+ value);
    if(value < 20){
        $(key).css('color','#e74c3c')
    }
    if(value > 21 && value < 40){
        $(key).css('color','#e7832b')
    }
    if(value > 41 && value < 60){
        $(key).css('color','#f1c40f')
    }
    if(value > 61 && value < 80){
        $(key).css('color','#3498db')
    }
    if(value > 81 && value < 100){
        $(key).css('color','#2abb67')
    }
    });
});