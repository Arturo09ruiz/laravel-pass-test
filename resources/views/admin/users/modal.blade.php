<div class="modal fade" id="registrar_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                  <input class="form-control name" placeholder="Ingresar Nombre" name="name" id="name" required type="text">
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input class="form-control email" placeholder="Ingresar Email" name="email" id="email" required type="email">
                  </div>
              </div>
              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input class="form-control password" id="password" placeholder="Ingresar Contraseña" name="password" required type="password">
                  </div>
              </div>

              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                    <select class="form-control status" name="status"  id="status">
                        <option value="" disabled selected>Selecciona el Status</option>
                        <option value="Active">Active</option>
                        <option value="Disabled">Disabled</option>
                    </select>
                </div>
            </div>

            <div>
                <p class="info-validation" id="text_validation">Debes de completar el formulario para continuar*</p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary save">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
