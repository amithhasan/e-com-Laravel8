@extends('master')
@section('content')

<div class="container custom-product"> 
        <div class="col-sm-8 ">
            <table class="table table-striped">
               <br><br>
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}} TK</td>
                  </tr>
                  <tr>
                    <td>Tax.</td>
                    <td>0 Tk</td>
                  </tr>
                  <tr>
                    <td>Delivery Charge</td>
                    <td>100 tk</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>
                  </tr>
                  
                </tbody>
              </table>
              <form method="POST" action="/orderplace">
               @csrf
                <div class="form-group">
                    <label >Delivery address:</label>
                 </div>
                <div class="form-group">
                  <textarea  name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method:</label>
                  <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
                  <p><input type="radio" value="cash" name="payment"> <span>Bcash Payment</span></p>
                  <p><input type="radio" value="cash" name="payment"> <span>Card Payment</span></p>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form> 
        </div>
</div>
@endsection