module.exports = function(IMGSRC) {
	// CONTENT STRATEGIES PROTOTYPES
	/**	
	 * Abstract Class that is extended by TextContentStrategy, AudioContentStrategy, etc.
	 * @param {Card} card 
	 */	
	var ContentStrategy = function(card) {
		if(this.constructor == ContentStrategy) {
			throw new Error("Can't instantiate abstract class!");
		}
		
		this.init(card);

		this.content = this.getInitialContent();
	};

	/**
	 * ContentStrategy concrete and abstract methods
	 * @return {[type]} [description]
	 */
	ContentStrategy.prototype = {
		/**
		 * CONCRETE METHODS
		 */
		init: function(card) {
			this.flip = card.flip;
			this.flop = card.flop;
			this.source = this.flipSource = card.flip_source;
			this.flopSource = card.flop_source;

			this.flipped = false;
		},

		/**
		 * ABSTRACT METHODS
		 */
		getInitialContent: function() {
			throw new Error("Abstract Method");
		},

		flipCard: function() {
			throw new Error("Abstract Method");
		}
	};

	var TextContentStrategy = function(card) {
		ContentStrategy.apply(this, arguments);
	};

	TextContentStrategy.prototype = Object.create(ContentStrategy.prototype);
	TextContentStrategy.prototype.constructor = TextContentStrategy;

	TextContentStrategy.prototype
		.getInitialContent = function() {
			return this.flip;
		};

	TextContentStrategy.prototype
		.flipCard = function() {
			this.content = (this.flipped) ? this.flip : this.flop;
			this.source = (this.flipped) ? this.flipSource : this.flopSource;
			this.flipped = !this.flipped;

			return this.content;
		};

	var AudioContentStrategy = function(card) {
		ContentStrategy.apply(this, arguments);
	};
		
	AudioContentStrategy.prototype = Object.create(ContentStrategy.prototype);
	AudioContentStrategy.prototype.constructor = AudioContentStrategy;
	
	AudioContentStrategy.prototype
		.getInitialContent = function(card) {
			return 'Audio: ' + this.flip;
		};

	AudioContentStrategy.prototype
		.flipCard =	function() {
			this.content = (this.flipped) ? 'Audio ' + this.flip : 'Audio ' + this.flop;
			this.source = (this.flipped) ? this.flipSource : this.flopSource;

			this.flipped = !this.flipped;

			return this.content;
		};

	// CARD PROTOTYPE
	var Card = function(data) {
		for (var key in data) {
			this[key] = data[key];
		}
	
		this.setContentStrategy(this.source_type);

		this.content = this.contentStrategy.content;
		this.source = this.contentStrategy.source;

		this.background = this.flipBackground;

		this.style = {
			backgroundImage: 'url( ' + IMGSRC.imgSrc + this.background + ')',
			backgroundSize: 'cover'
		};
	};

	Card.prototype = {
		setContentStrategy: function(type) {
			switch (type) {
				case 'text':
					this.contentStrategy = new TextContentStrategy(this);
					break;
				case 'audio':
					this.contentStrategy = new AudioContentStrategy(this);
					break;
			}
		},

		flipCard: function() {
			this.content = this.contentStrategy.flipCard();
			this.source = this.contentStrategy.source;
			this.background = (this.contentStrategy.flipped) ? this.flopBackground : this.flipBackground;
			this.style = {
				backgroundImage: 'url( ' + IMGSRC.imgSrc + this.background + ')',
				backgroundSize: 'cover'
			};
		}
	};

	var create = function(data) {
		return new Card(data);
	};

	// this actually returns the method that will be attached to CardFcty.
	return {
		create: create
	};
};