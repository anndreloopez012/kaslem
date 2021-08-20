<script>
    function fntInsertHome() {

        valor = document.getElementById("title").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor complete el siguiente campo:Titulo');
            return false;
        }

        valor = document.getElementById("content").value;
        if (valor == null || valor.length == 0 || /^\s+$/.test(valor)) {
            alertify.alert('Aviso', 'Por favor complete el siguiente campo:Contenido');
            return false;
        }

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_home').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_home",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_home")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntUpdateAbout() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_about').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=update_about",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            //$("#form_data_home")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntUpdateHeader() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_header').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=update_header",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            //$("#form_data_home")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntUpdateService() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_services').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=update_service",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            //$("#form_data_home")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertService() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_services').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_service",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_services")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertBtnPorfolio() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_porfolio_btn').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_btn_porfolio",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_porfolio_btn")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertPorfolio() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_porfolio').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_porfolio",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_porfolio")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertWork() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_work').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_work",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_work")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertWorkCv() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_work_cv').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_work_cv",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_work_cv")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertQuestion() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_question').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_question",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_question")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntInsertTeam() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_team').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=insert_team",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            $("#form_data_team")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntUpdateContact() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_contact').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=update_contact",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            //$("#form_data_contact")[0].reset();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteHome() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_home').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_home",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoHome();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteService() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_services').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_servi",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoServi();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteMenuPorfolio() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_porfolio_btn').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_btn_porfolio",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoBtnPorfolio();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeletePorfolio() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_porfolio').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_porfolio",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoPorfolio();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteMenuWork() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_work').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_trabajo",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoTrabajo();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteMenuCv() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_work_cv').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_trabajo_cv",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoTrabajoCv();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteQuest() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_question').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_preguntas",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoPreguntas();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDeleteTeam() {

        alertify.confirm('Dashboard', 'Seguro que desea continuar? ', function() {
            var datos = $('#form_data_team').serialize();
            //alert(datos);
            //return false;
            document.getElementById("loading-screen").style.display = "block";

            $.ajax({
                type: "POST",
                data: datos,
                dataType: 'json',
                url: "dashboard.php?ajax=true&validaciones=delete_equipo",
                success: function(r) {
                    if (r.status) {
                        if (r.status == 1) {
                            alertify.alert('Aviso', 'Datos cargados correctamente');
                            fntDibujoEquipo();
                            //location.reload(); 
                            document.getElementById("loading-screen").style.display = "none";
                        }
                    } else {
                        alertify.alert('Aviso', 'Datos no cargados correctamente!');
                        //location.reload(); 
                    }
                }
            });
        }, function() {
            alertify.error('Cancel')
        })
        return false;
    };

    function fntDibujoHome() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_home",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_home_").html("");
                $("#dibujo_tabla_home_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoServi() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_servi",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_servi_").html("");
                $("#dibujo_tabla_servi_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoBtnPorfolio() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_btn_porfolio",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_btn_formulario_").html("");
                $("#dibujo_tabla_btn_formulario_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoPorfolio() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_porfolio",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_formulario_").html("");
                $("#dibujo_tabla_formulario_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoTrabajo() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_trabajo",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_trabajo_").html("");
                $("#dibujo_tabla_trabajo_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoTrabajoCv() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_trabajo_cv",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_trabajo_cv_").html("");
                $("#dibujo_tabla_trabajo_cv_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoPreguntas() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_preguntas",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_preguntas_").html("");
                $("#dibujo_tabla_preguntas_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };

    function fntDibujoEquipo() {
        //alert(strPais + "                                  strPais");
        document.getElementById("loading-screen").style.display = "block";

        $.ajax({

            url: "dashboard.php?validaciones=dibujo_tabla_equipo",
            data: {},
            async: true,
            global: false,
            type: "post",
            dataType: "html",
            success: function(data) {

                $("#dibujo_tabla_equipo_").html("");
                $("#dibujo_tabla_equipo_").html(data);
                document.getElementById("loading-screen").style.display = "none";
                return false;
            }
        });

    };


    function fntSelectDeleteHome(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            //alert(strId + "                         strId");
            $("#idHome").val(strId);
        }
        fntDeleteHome()
    }

    function fntSelectDeleteService(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idService").val(strId);
        }
        fntDeleteService()
    }

    function fntSelectDeleteMenuPorfolio(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idMenuPorfolio").val(strId);
        }
        fntDeleteMenuPorfolio()
    }

    function fntSelectDeletePorfolio(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idPorfolio").val(strId);
        }
        fntDeletePorfolio()
    }

    function fntSelectDeleteMenuWork(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idMenuWork").val(strId);
        }
        fntDeleteMenuWork()
    }

    function fntSelectDeleteMenuCv(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idMenuCv").val(strId);
        }
        fntDeleteMenuCv()
    }

    function fntSelectDeleteQuest(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idQuest").val(strId);
        }
        fntDeleteQuest()
    }

    function fntSelectDeleteTeam(intParametro) {
        intParametro = !intParametro ? 0 : intParametro;
        if (intParametro > 0) {
            var strId = $("#hidId_" + intParametro).val();
            // alert(strDPI + "                         strDPI");
            $("#idTeam").val(strId);
        }
        fntDeleteTeam()
    }

    ///////////////////////////////////////IMG PROCES///////////////////////////////////
    $(function() {

        $('#form-perfil').on('change', 'input[type="file"]', function(event) {
            let extensionesPermitidas = [
                "jpeg", "jpg", "png"
            ]
            let id = String($(this).attr('id'))

            let file_data = $(this).prop('files')[0];
            let form_data = new FormData();
            if (file_data.name) {
                let strExtension = ''
                let TMP = file_data.type.indexOf('/') !== -1 ? file_data.type.split('/') : file_data.type
                strExtension = TMP
                if (typeof(TMP) == "object")
                    strExtension = TMP[TMP.length - 1]
                if ($('#' + id).hasClass('tbl-btn-upload') || extensionesPermitidas.indexOf(strExtension) !== -1) {
                    form_data.append('getPrecargarArchivos', 1);
                    form_data.append('archivo', file_data);
                    form_data.append('nombre_archivo', file_data.name);
                    form_data.append('extension', strExtension);
                    $.ajax({
                        url: "dashboard.php?validaciones=proces_img",
                        dataType: 'json',
                        async: true,
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function(data) {
                            if (String(data.respuesta) !== "false") {
                                let strName = file_data.name.substr(0, file_data.name.indexOf('.'));
                                $('#img_' + id).attr('src', data.respuesta);
                                $('#img_' + id).attr('name', strName);
                            } else {
                                let mensaje = " correcta"
                                if (extensionesPermitidas.length > 0)
                                    mensaje = ": " + extensionesPermitidas.join(",")
                                // $('#img_' + id).attr('src', "http://placehold.it/512x512");
                            }
                        },
                        error: function() {
                            let mensaje = " correcta"
                            if (extensionesPermitidas.length > 0)
                                mensaje = ": " + extensionesPermitidas.join(",")
                            //$('#img_' + id).attr('src', "http://placehold.it/512x512");
                        }
                    })
                } else {
                    let mensaje = " correcta"
                    if (extensionesPermitidas.length > 0)
                        mensaje = ": " + extensionesPermitidas.join(",")
                    // $('#img_' + id).attr('src', "http://placehold.it/512x512");
                }
            } else {
                // $('#img_' + id).attr('src', "http://placehold.it/512x512");
            }
        });

    })

    // window.addEventListener('load', fntDibujoDropDep, false)
</script>