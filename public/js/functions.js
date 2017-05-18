// The day of the week
var day = new Date();
var n = day.getDate();
document.getElementById('date').innerHTML = n;

// The Month of the year
var month = new Date();
var arr = new Array();
arr[0] = "January";
arr[1] = "February";
arr[2] = "March";
arr[3] = "April";
arr[4] = "May";
arr[5] = "June";
arr[6] = "July";
arr[7] = "August";
arr[8] = "September";
arr[9] = "October";
arr[10] = "November";
arr[11] = "December";
var m = arr[month.getMonth()];
document.getElementById('month').innerHTML = m;


//basic paging logic to demo the buttons
var pr = document.querySelector( '.paginate.left' );
var pl = document.querySelector( '.paginate.right' );

pr.onclick = slide.bind( this, -1 );
pl.onclick = slide.bind( this, 1 );

var index = 0, total = 10;

function slide(offset) {
    index = Math.min( Math.max( index + offset, 0 ), total - 1 );

    document.querySelector( '.counter' ).innerHTML = ( index + 1 ) + ' / ' + total;

    pr.setAttribute( 'data-state', index === 0 ? 'disabled' : '' );
    pl.setAttribute( 'data-state', index === total - 1 ? 'disabled' : '' );
}

slide(0);