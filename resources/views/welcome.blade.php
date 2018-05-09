<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('lte.htmlhead')

    <body class="hold-transition lockscreen">

        <div class="lockscreen-wrapper">
            
            <div class="lockscreen-logo">
                Grupo Brica
            </div>

            <div class="lockscreen-item">
                
                <div class="lockscreen-image">
                    <img src="{{ asset('img/runa.png') }}" alt="Runa Aceros">
                </div>

                <div class="lockscreen-credentials">
                    <div class="input-group">
                        <input type="text" class="form-control" value="RUNA" disabled>

                        <div class="input-group-btn">
                            <a href="runa" class="btn"><i class="fa fa-arrow-right text-muted"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="lockscreen-item">
                
                <div class="lockscreen-image">
                    <img src="{{ asset('img/hercules.png') }}" alt="Carrocerías Hércules">
                </div>

                <div class="lockscreen-credentials">
                    <div class="input-group">
                        <input type="text" class="form-control" value="HERCULES" disabled>

                        <div class="input-group-btn">
                            <a href="hercules" class="btn"><i class="fa fa-arrow-right text-muted"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="help-block text-center">
                Elija a qué sitio quiere dirigirse
            </div>

        </div>

    </body>
</html>
