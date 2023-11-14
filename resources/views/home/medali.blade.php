@extends('home.layouts.index')

@section('css')

@stop

@section('content')
<div class="container">

    <div class="m-12 bg-dark-blue">
        <div class="module-content">
            <div class="title-default">
            <h2>Scores Table</h2>
        </div>				
        <table class="table-scores">
            <tbody><tr class="t-header">
                <td>Pos</td>
                <td>Team</td>
                <td>P</td>
                <td>Pts</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Man City</td>
                <td>31</td>
                <td>70</td>
            </tr>	
            <tr>
                <td>2</td>
                <td>Man City</td>
                <td>25</td>
                <td>65</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Man City</td>
                <td>23</td>
                <td>62</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Man City</td>
                <td>21</td>
                <td>59</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Man City</td>
                <td>19</td>
                <td>53</td>
            </tr>																																																																																				
        </tbody></table>	
    </div>		
</div>
</div>
@stop