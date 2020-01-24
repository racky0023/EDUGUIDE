@extends("layout.app")
 
@section('container')


    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">inscription nouveau prof</h2>
                    <form action="{{route('creation_prof')}}" method="post">
                    @csrf
                        <div class="row row-space">
                       
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">nom</label>
                                    <input class="input--style-4" type="text" name="nom">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">prenom</label>
                                    <input class="input--style-4" type="text" name="prenom">
                                </div>
                                <div class="input-group">
                                    <label class="label">grade</label>
                                    <input class="input--style-4" type="text" name="grade">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">naissance</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="naissance">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Genre</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="genre">
                                            <option value="masculin">Masculin</option>
                                            <option value="feminin">Feminin</option>     
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">telephone</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">matieres</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="matieres">
                                    <option value="">choix des matieres</option>
                                    <option value="reseaux">Reseaux</option>
                                    <option value="maintenance informatique">Maintenance informatique</option>
                                    <option value="developpement">Developpement</option>
                                    <option value="anglais informatique">Anglais informatique</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                          
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">envoyez</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  







    
@endsection