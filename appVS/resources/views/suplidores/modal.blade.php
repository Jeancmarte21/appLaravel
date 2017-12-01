<a href="#" class="btn btn-danger btn btn-xs" onclick=" var result = confirm('Esta seguro de eliminar este Suplidor?');
                        if( result ){
                                event.preventDefault();
                                document.getElementById('delete-form').submit();}"> <i class="fa fa-trash"></i> <span>ELIMINAR</span></a>



                                <form id="delete-form" action="{{ route('suplidores.destroy',[$suplidor->idsuplidor]) }}"
                                                method="POST" style="display: none;">
                                                        <input type="hidden" name="_method" value="delete">
                                                        {{ csrf_field() }}
                                              </form>
