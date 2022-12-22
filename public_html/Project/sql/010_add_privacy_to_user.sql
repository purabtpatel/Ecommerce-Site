-- User can set their profile to be public or private (will need another column in Users table)

ALTER TABLE Users ADD COLUMN privacy BOOLEAN NOT NULL DEFAULT TRUE;