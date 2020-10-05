<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Perfil</legend>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['nom_per'] ?>" id="nom_per" name="nom_per" type="text"
                                    placeholder="Tipo Perfil" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['id_per'] ?>" id="id_per" name="id_per" type="text"
                                    placeholder="ID Perfil" class="form-control">
                            </div>
                        </div>



                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['nom_per'] ?>" value="<?= $datos['nom_per'] ?>" id="nom_per"
                                    name="nom_per" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['ape_per'] ?>" id="ape_per" name="ape_per" type="text"
                                    placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center">
                                <iSubmit class="fa fa-envelope-o bigicon"></iSubmit>
                            </span>
                            <div class="col-md-8">
                                <input value="<?= $datos['cat_per'] ?>" id="cat_per" name="cat_per" type="text"
                                    placeholder="Categoria" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['edad_per'] ?>" id="edad_per" name="edad_per" type="text"
                                    placeholder="Edad" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                    class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input value="<?= $datos['car_per'] ?>" id="car_per" name="car_per" type="text"
                                    placeholder="Cargo" class="form-control">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<? 

?>