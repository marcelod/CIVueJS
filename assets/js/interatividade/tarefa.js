var candidates = [
	{
		name:'Prefeito Ladrao PL',
		votes: 0
	},

	{
		name:'Prefeito Bandido PB',
		votes: 0
	},

	{
		name:'Prefeito Safado PS',
		votes: 0
	},

	{
		name:'Prefeito Mentiroso PM',
		votes: 0
	},
];



new Vue({
	el: '#app',
	data: {
		candidates: candidates
	},

  	computed: {
	    mayor: function () {
	        //first we sort the array descending
	        var candidatesSorted = this.candidates.sort(function (a, b) {
	            return b.votes - a.votes;
	        });
	        //the mayor will be the first item
	        return candidatesSorted[0];
	    }
	},

	methods: {
	  	//this method runs when the key 'delete' is pressed
	    clear: function () {
	        //Turn votes of all candidate to 0 using map() function.
	        this.candidates = this.candidates.map(function (candidate) {
	            candidate.votes = 0;
	            return candidate;
	        })
	    }
  	}
})