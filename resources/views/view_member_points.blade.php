<table style="width:100%">
  <tr>
    <th>Points Claimed</th>
    <th>Points Before Claimed</th>
    <th>Points After Claimed</th>
    <th>Date Claimed</th>
  </tr>
  @foreach ($get_points as $gp)
    <tr>
      <td>{{$gp->amount}}</td>      
      <td>{{$gp->amount_before}}</td>      
      <td>{{$gp->amount_before - $gp->amount}}</td>      
      <td>{{date('F j, Y, g:i a', strtotime($gp->date_claimed)) }}</td>    
    </tr>
  @endforeach
</table>

<style type="text/css">
table, th, td 
{
  border: 1px solid black;
  border-collapse: collapse;
  text-align: left;
}
</style>