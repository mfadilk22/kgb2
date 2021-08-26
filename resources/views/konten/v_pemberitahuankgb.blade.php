@extends('layout.v_template')
@section('judul','Pemberitahuan KGB')

@section('konten')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Pemberitahuan KGB</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" action="{{ route('order') }}" method="post">     
                  @csrf               
                    <!-- select -->
                    
                    <div class="form-group">
                        <label>Pilih isi pesan</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" value = "Assalamualaikum wr.wb. Bapak/Ibu Berikut pesan ini kami sampaikan bahwa Bapak/Ibu akan melakukan KGB pada bulan berikutnya. Terima Kasih. Wassalam" checked>
                            Assalamualaikum wr.wb Bapak/Ibu
                            Berikut pesan ini kami sampaikan bahwa Bapak/Ibu akan melakukan KGB pada bulan berikutnya. Terima Kasih.
                            Wassalam
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" value="Assalamualaikum wr.wb Bapak/Ibu Pemberitahuan bagi Bapak/Ibu pegawai BPS Aceh Utara, bahwa Bapak/Ibu akan melakukan KGB pada bulan depan. Terima Kasih. Wassalam">
                            Assalamualaikum wr.wb Bapak/Ibu
                            Pemberitahuan bagi Bapak/Ibu pegawai BPS Aceh Utara, bahwa Bapak/Ibu akan melakukan KGB pada bulan depan. Terima Kasih.
                            Wassalam
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" value="Assalamualaikum wr.wb Bapak/Ibu Bagi Bapak/Ibu pegawai BPS Aceh Utara, berikut pesan ini disampaikan sebagai pemberitahuan bagi Bapak/Ibu untuk melakukan KGB di bulan depan. Terima Kasih. Wassalam">
                            Assalamualaikum wr.wb Bapak/Ibu
                            Bagi Bapak/Ibu pegawai BPS Aceh Utara, berikut pesan ini disampaikan sebagai pemberitahuan bagi Bapak/Ibu untuk melakukan KGB di bulan depan. Terima Kasih.
                            Wassalam
                          </label>
                        <div class="radio ">
                          <label>
                            <input type="radio" name="optionsRadios" value="Assalamualaikum wr.wb Bapak/Ibu. Berikut pesan ini kami sampaikan bahwa Bapak/Ibu akan melakukan KGB pada bulan berikutnya. Terima Kasih. Wassalam">
                            Assalamualaikum wr.wb Bapak/Ibu
                            Berikut pesan ini kami sampaikan bahwa Bapak/Ibu akan melakukan KGB pada bulan berikutnya. Terima Kasih.
                            Wassalam
                          </label>
                        </div>
                        </div>
                      </div>
                    <!-- textarea -->
                    <script>
                      function displayRadioValue() {
                          var ele = document.getElementsByName('optionsRadios');
                            
                          for(i = 0; i < ele.length; i++) {
                              if(ele[i].checked)
                              document.getElementById("textarea").innerHTML
                                      = ele[i].value;
                          }
                      }
                  </script>
                    <div class="form-group">
                        <label>Isi Pesan</label>
                        <textarea class="form-control" onclick="displayRadioValue()" name = "pesan" id="textarea" rows="6" placeholder="Klik di sini untuk menampilkan isi pesan"></textarea>
                    </div>                   

                    <div class="box-footer">
                        <button href="#" type="submit" class="btn btn-success pull-right">Kirim Pesan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Kolom kanan -->
    <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Pegawai Yang Akan Melakukan KGB</h3>
          </div>
          <div class="box-body">
              <table class = "table table-bordered table-hover">      
                      
                  <thead class="box">
                    <tr>                                
                      <th>Nama</th>
                      <th>NIP</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal KGB</th>
                      <th>No HP</th>
                  </tr>
              </thead>
              <tbody class="box">
                  @foreach ($sortedDate as $kgb)
                      @if(Carbon\Carbon::parse($kgb->tgl_kgb)->diffInDays(now()) < 33)
                          <tr>
                              
                              <td>{{ $kgb->nama }}</td>
                              <td>{{ $kgb->nip }}</td>
                              <td>{{ $kgb->jk }}</td>
                              <td>{{ Carbon\Carbon::parse($kgb->tgl_kgb)->isoFormat("D MMM YYYY") }}</td>
                              <td>{{ $kgb->no_hp }}</td>
                          </tr>
                      @endif
                  @endforeach
              </tbody>        
              </table>
          </div>    
      </div>
    </div>
</div>

{{-- <div class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            
        <div class="box-body">
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            </div>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Select</label>
                <select class="form-control">
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
              </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                </div>
            </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
        </form>
    </div>
/</div> --}}
@endsection