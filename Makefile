alfredworkflow:
	composer install
	mkdir -p alfredworkflow/src
	cp -R src bin vendor alfredworkflow/src
	cd alfredworkflow && zip -r demo.alfredworkflow *
	mv alfredworkflow/demo.alfredworkflow .

.PHONY: alfredworkflow
