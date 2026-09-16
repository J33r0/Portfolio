# portfolio

## Adding projects

Projects are stored in `assets/php/database.sqlite`. Each project has one shared image path and translated title and description fields:

- `title_en`, `title_fr`, `title_es`
- `description_en`, `description_fr`, `description_es`

For example:

```sql
INSERT INTO projects (
	img_path,
	title_en, title_fr, title_es,
	description_en, description_fr, description_es
) VALUES (
	'assets/img/projects/my-project.png',
	'My project', 'Mon projet', 'Mi proyecto',
	'Description of my project', 'Description de mon projet', 'Descripcion de mi proyecto'
);
```

The site uses the selected `lang` value for project listings, search results, project details, and the "See more" API request. English is used as a fallback when another translation is empty.