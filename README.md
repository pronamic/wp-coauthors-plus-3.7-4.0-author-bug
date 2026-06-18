# Co-Authors Plus 3.7 vs 4.0 Author Bug Reproduction

Test repository to reproduce a wrong author bug introduced in Co-Authors Plus 4.0.

**Original Issue:** https://github.com/pronamic/casinonieuws/issues/356#event-26758980802

## Setup

This project uses `wp-env` to test the bug with both Co-Authors Plus v3.7 and v4.0:

```bash
npm install
wp-env start
```

Both plugin versions are mapped as separate plugins:
- `/wp-content/plugins/co-authors-plus-3.7/` – Co-Authors Plus v3.7 (baseline)
- `/wp-content/plugins/co-authors-plus-4.0/` – Co-Authors Plus v4.0 (regression test)

You can activate each version independently in the WordPress admin to test and compare behavior.

## Create Test Authors

To create test author users for testing, run:

```bash
wp-env run cli wp user create author1 author1@example.test --user_pass=password --role=author
wp-env run cli wp user create author2 author2@example.test --user_pass=password --role=author
wp-env run cli wp user create author3 author3@example.test --user_pass=password --role=author
wp-env run cli wp user list --role=author --format=table
```

**Credentials:**
- Username: `author1`, `author2`, `author3`
- Password: `password`
